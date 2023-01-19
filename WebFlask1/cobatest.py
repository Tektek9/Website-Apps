import requests

mydata={"nama":"WAKWAW"}
req=requests.post("http://127.0.0.1:5000/cobatest")

print(req.text)