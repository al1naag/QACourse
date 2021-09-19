from flask import Flask, request, jsonify

app = Flask(__name__)


@app.route("/")
def test_api():
    return "<p>Welcome to Test API<p>"


@app.route("/zoo_add", methods=['POST'])
def zoo_add_function():
    if request.method == 'POST':
        name = request.form.get('name')
        type_animal = request.form.get('type_animal')
        age = int(request.form.get('age'))
        weight = float(request.form.get('weight'))
    resp = {'name': name,
            'type_animal': type_animal,
            'age': age,
            'weight': weight,
            'food': weight * 0.2
            }
    return jsonify(resp)


@app.route("/zoo_list")
def zoo_list_function():
    zoo_list = {
        'Animals_list': [
            {'name': 'Кэти',
             'type_animal': 'Кошка',
             'age': 2,
             'weight': 4,
             'food': 0.8
             },
            {'name': 'Джордж',
             'type_animal': 'Собака',
             'age': 3,
             'weight': 10,
             'food': 2
             },
            {'name': 'Пэри',
             'type_animal': 'Попугай',
             'age': 10,
             'weight': 1,
             'food': 0.2
             }]}
    return jsonify(zoo_list)
