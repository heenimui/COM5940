from flask import Flask, render_template, request, json, redirect, session
from flask import Markup
import requests

app = Flask(__name__)
app.config["DEBUG"] = False

@app.route("/")
def home():
    return render_template('index.html')

@app.route("/index_get_data")
def table():
    headers = {
        'Authorization': 'Bearer keyHwnj1ElCshCfmN',
    }

    params = (
        ('maxRecords', '25'),
        ('view', 'Main View'),
    )

    r = requests.get('https://api.airtable.com/v0/appu0J2kBjpHI0CnH/UnivRank?api_key=keyHwnj1ElCshCfmN&sortField=_createdTime&sortDirection=desc', headers=headers, params=params)
    dict = r.json() #request the data and convert to json; put the json into a variable called dict
    dataset = [] #define a blank list, assign the list to a variable called dataset
    for record in dict['records']:
         dict = record['fields']
    dataset.append(dict)

    return render_template('index.html', entries=dataset)


if __name__ == '__main__':
   app.run(debug = True)
