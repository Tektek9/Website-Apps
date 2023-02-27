from flask import Flask, render_template, url_for
import  requests, schedule

app = Flask(__name__)

def copit():
    alamatAPI="https://covid19.kuningankab.go.id/api/latest-full-v2"
    update_data= requests.get(alamatAPI).json()
    return update_data

refresh_schedulewkwkwk=schedule.every(2).seconds.do(copit)

copat=copit()

@app.route("/")
def index():
    return render_template('index.html', copat=copat)

if __name__=="__main__":
    app.run(debug=True)