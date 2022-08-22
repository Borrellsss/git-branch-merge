<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="root">
        <h1>STUDENTS</h1>

        <div class="container">
            <div class="card" v-for="student in studentsArray">
                <div>
                    <strong>Nome e Cognome:</strong> {{`${student.nome} ${student.cognome}`}}
                </div>
                <div>
                    <strong>Età:</strong> {{student.age}}
                </div>
                <div>
                    <strong>Sesso:</strong> {{student.sesso}}
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>