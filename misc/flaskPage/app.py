from flask import Flask, render_template, request, jsonify

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/stats')
def stats():
    return render_template('stats.html')

@app.route('/turn_on/', methods=['POST'])
def turn_on():
    time = int(request.form.get('number', 0))
    data = {'time': time}
    data = jsonify(data)
    return data

@app.route('/test')
def phpscript():
    return render_template('webpage.php')

if __name__ == '__main__':
    app.run(debug=True, host='0.0.0.0')
