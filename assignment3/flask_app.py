from flask import Flask, render_template, request, json, redirect, session
from flask import Markup
import requests

app = Flask(__name__)
app.config["DEBUG"] = False

@app.route("/")
def home():
    return render_template('index.html')

@app.route("/index_chart")
def chart():
    r = requests.get('https://api.airtable.com/v0/appAIHCBijmOXqMWG/membership_points?api_key=keyHwnj1ElCshCfmN&sortField=_createdTime&sortDirection=desc')
    dict1 = r.json()
    dict2 = {}
    dataset = []
    name_list = []
    point_list = []
    for i in dict1['records']:
         dict2 = i['fields']
         dataset.append(dict2)
    for item in dataset:
        name_list.append(item.get('name'))
        point_list.append(item.get('point'))
    return render_template('index.html', entries = zip(name_list, point_list))

if __name__ == '__main__':
   app.run(debug = True)
