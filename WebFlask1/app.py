from flask import Flask, render_template
#from markupsafe import excape
from flask import escape
from flask import request
app = Flask(__name__)

@app.route('/')
def index():
    mylist = ["Apel", "Mangga", "Jeruk"]
    thidic = {"nama": "andi", "alamat":"jl.Srikandi", "usia":"20"}
    return render_template('Home.html' , nama="Budi", umur=19 , list=mylist, dic=thidic)

@app.route('/portofolio')
def portofolio():
    return render_template('Porto.html')

@app.route('/dokumentasi')
def dokumentasi():
    return '<h1>Dokumentasi Saya</h1>'

@app.route('/tentang')
def tentang():
    return render_template('Tentang.html')

@app.route('/tentang/<username>')
def profile(username) :
    return '<h1>Hallo Saya %s !</h1>' % username

@app.route('/tentang/<int:number>')
def profile_number(number):
    number = number + 10000
    return '<h1>Nomer Yang anda inputkan telah ditambah 10000 dan menjadi %s !</h1>' % number

@app.route('/wkwk',defaults={'_route':"portofolio",'angka':0})
@app.route('/wkwk/<int:angka>',defaults={'_route':"dokumentasi"})
def profile_number2(angka,_route):
    if _route=="portofolio":
        return'<h1>PORTOFOLIO</h1>'
    elif _route=="dokumentasi":
        angka = angka+10000
        return '<h1>Nomer Yang anda inputkan telah ditambah 10000 dan menjadi %s !</h1>' % angka

@app.route("/htmlescape/<code>")
def htmlescape(code):
    mystring="!@#$%^&*()_+=-`~*/\|\{\}:\"\'<>,./" #secure web escape from symbol
    return escape(mystring)
    #return escape(code)

@app.route('/routetanpaslash')#apabila ditambah slash akan error
def routetanpaslash():
    return '<h1>Route tanpa Slash</h1>'

@app.route('/routedgslash/')#tanpa slash akan tetap bisa running alias terhindar dari error 404
def routedgslash():
    return '<h1>Route dengan Slash</h1>'

@app.route("/info",methods=['GET','POST'])
def info():
    if request.method=="GET":
        return request.args.get("nama") + request.args.get("alamat")
        #CONTOH: http://127.0.0.1:5000/info?nama=ANJAY&alamat=jlwkwkwkwwk
    elif request.method=="POST":
        return request.form["nama"]

app.run(debug=True)