import json, requests, datetime
from flask import Flask, request, abort, jsonify
url = 'http://127.0.0.1:5000/api'
# date_time = datetime.datetime.strptime('1/10/2018 21:45:00', '%d/%m/%Y %H:%M:%S').timestamp()
j_data = json.dumps({"dept_date_time":'1/10/2018 21:45:00',"origin":"JFK","destination":"ATL"})
r = requests.post(url, data=j_data)

print(r, r.text)
