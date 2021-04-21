from flask import Flask,request,redirect,render_template,url_for

app=Flask(__Name__)

@app.route('/')
def home():
    cources = Cource.query.all()
    return render_template('index.html',courc=cources)

  
  if __Name__=="__main__":
    app.run()
