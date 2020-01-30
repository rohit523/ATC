from flask import Flask, request, redirect, url_for, flash, jsonify
from flask_mysqldb import MySQL
import numpy as np
import pickle as p
import json
import pandas as pd
import math
from sklearn.model_selection import train_test_split
from sklearn.ensemble import RandomForestClassifier
from flask_cors import CORS



app = Flask(__name__)
# app = Flask(__name__) = pickle.load(open('model.pkl','rb'))

#app.secret_key = 'many random bytes'

cors = CORS(app)

modelfile = 'model.pkl'
model = p.load(open(modelfile, 'rb'))

app.config['MYSQL_HOST'] = 'localhost'
app.config['MYSQL_USER'] = 'root'
app.config['MYSQL_PASSWORD'] = ''
app.config['MYSQL_DB'] = 'atc'

mysql = MySQL(app)


@app.route('/')
def index():
    
    db = mysql.connect

    cursor = db.cursor()

    cursor.execute("SELECT Airport,Date FROM slots")

    data = cursor.fetchone()

    db.close()



    return jsonify([row for row in cursor.fetchall()])


@app.route('/api', methods = ['POST'])
def make_predict():
    #return jsonify(request.get_json())
    data = request.get_json(force=True)
    #return '123'
    #predict_request = [data['dept_date_time'],data['origin'],data['destination']]
    #predict_request = np.array(predict_request)
    #delay_predicted = model.predict(predict_request)
    output = predict_delay(data['dept_date_time'],data['origin'],data['destination'])
    #return '123'
    return jsonify(output)
    
def predict_delay(departure_date_time, origin, destination):
    from datetime import datetime

    try:
        departure_date_time_parsed = datetime.strptime(departure_date_time, '%d/%m/%Y %H:%M:%S')
    except ValueError as e:
        return 'Error parsing date/time - {}'.format(e)

    month = departure_date_time_parsed.month
    day = departure_date_time_parsed.day
    day_of_week = departure_date_time_parsed.isoweekday()
    hour = departure_date_time_parsed.hour

    origin = origin.upper()
    destination = destination.upper()

    input = [{'MONTH': month,
              'DAY': day,
              'DAY_OF_WEEK': day_of_week,
              'CRS_DEP_TIME': hour,
              'ORIGIN_ATL': 1 if origin == 'ATL' else 0,
              'ORIGIN_DTW': 1 if origin == 'DTW' else 0,
              'ORIGIN_JFK': 1 if origin == 'JFK' else 0,
              'ORIGIN_MSP': 1 if origin == 'MSP' else 0,
              'ORIGIN_SEA': 1 if origin == 'SEA' else 0,
              'DEST_ATL': 1 if destination == 'ATL' else 0,
              'DEST_DTW': 1 if destination == 'DTW' else 0,
              'DEST_JFK': 1 if destination == 'JFK' else 0,
              'DEST_MSP': 1 if destination == 'MSP' else 0,
              'DEST_SEA': 1 if destination == 'SEA' else 0 }]

    return model.predict_proba(pd.DataFrame(input))[0][0]

@app.route('/prediction')
def prediction():
    data = request.get_json(force=True)
    predict_request = [data['dept_date_time'],data['origin'],data['destination']]
    predict_request = np.array(predict_request)
    delay_predicted = model.predict(predict_request)
    output = [delay_predicted[0]]
    return jsonify(results = output)

@app.route('/predict' , methods = ['POST'])
def predict():
    df=pd.read_csv('C:FlightData.csv')

    df = df.drop('Unnamed: 25', axis=1)

    df = df[["MONTH", "DAY_OF_MONTH", "DAY_OF_WEEK", "ORIGIN", "DEST", "CRS_DEP_TIME", "ARR_DEL15"]]

    df = df.fillna({'ARR_DEL15': 1})

    for index, row in df.iterrows():
        df.loc[index, 'CRS_DEP_TIME'] = math.floor(row['CRS_DEP_TIME'] / 100)

    df = pd.get_dummies(df, columns=['ORIGIN', 'DEST'])

    train_x, test_x, train_y, test_y = train_test_split(df.drop('ARR_DEL15', axis=1), df['ARR_DEL15'], test_size=0.2, random_state=42)

    model = RandomForestClassifier(random_state=13)
    model.fit(train_x, train_y)

    def predict_delay(departure_date_time, origin, destination):
        from datetime import datetime

        try:
            departure_date_time_parsed = datetime.strptime(departure_date_time, '%d/%m/%Y %H:%M:%S')
        except ValueError as e:
            return 'Error parsing date/time - {}'.format(e)

        month = departure_date_time_parsed.month
        day = departure_date_time_parsed.day
        day_of_week = departure_date_time_parsed.isoweekday()
        hour = departure_date_time_parsed.hour

        origin = origin.upper()
        destination = destination.upper()

        input = [{'MONTH': month,
                  'DAY': day,
                  'DAY_OF_WEEK': day_of_week,
                  'CRS_DEP_TIME': hour,
                  'ORIGIN_ATL': 1 if origin == 'ATL' else 0,
                  'ORIGIN_DTW': 1 if origin == 'DTW' else 0,
                  'ORIGIN_JFK': 1 if origin == 'JFK' else 0,
                  'ORIGIN_MSP': 1 if origin == 'MSP' else 0,
                  'ORIGIN_SEA': 1 if origin == 'SEA' else 0,
                  'DEST_ATL': 1 if destination == 'ATL' else 0,
                  'DEST_DTW': 1 if destination == 'DTW' else 0,
                  'DEST_JFK': 1 if destination == 'JFK' else 0,
                  'DEST_MSP': 1 if destination == 'MSP' else 0,
                  'DEST_SEA': 1 if destination == 'SEA' else 0 }]

        return model.predict_proba(pd.DataFrame(input))[0][0]
    var = predict_delay('1/10/2018 21:45:00', 'JFK', 'ATL')
    return str(var)


if __name__ == '__main__':
    
    app.run(debug=True, port = 5000)
