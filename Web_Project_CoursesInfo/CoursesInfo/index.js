const express = require('express')
const bodyParser = require('body-parser')
const app = express()
const port = 3000
var swaggerUi = require('swagger-ui-express')
var fs = require('fs')
var jsyaml = require('js-yaml');
var spec = fs.readFileSync('swagger.yml', 'utf8');
var swaggerDocument = jsyaml.load(spec);

app.use(bodyParser.json())
app.use(
  bodyParser.urlencoded({
    extended: true,
  })
)
app.get('/', (request, response) => {
  response.json({ info: 'CoursesInfo API' })
})


const db = require('./queries')
app.get('/students', db.getStudents)
app.get('/payments_page', db.getPaymentsPage)
app.get('/students_css', db.getStudentsCSS)
app.get('/students_js', db.getStudentsJS)
app.get('/students_html', db.getStudentsHTML)
app.get('/students_sql', db.getStudentsSQL)
app.get('/students_python', db.getStudentsPython)
app.get('/students_java', db.getStudentsJava)
app.get('/students/:student_id', db.getStudentById)
app.post('/students', db.createStudent)
app.put('/students/:student_id', db.updateStudent)
app.delete('/students/:student_id', db.deleteStudent)
app.get('/courses', db.getCourses)
app.get('/courses/:course_id', db.getCourseById)
app.post('/courses', db.createCourse)
app.put('/courses/:course_id', db.updateCourse)
app.delete('/courses/:course_id', db.deleteCourse)
app.get('/payments', db.getPayments)
app.get('/payments/:payment_id', db.getPaymentById)
app.post('/payments', db.createPayment)
app.put('/payments/:payment_id', db.updatePayment)
app.delete('/payments/:payment_id', db.deletePayment)
app.get('/students_courses', db.getStudentsCourses)
app.get('/students_courses/:student_courses_id', db.getStudentsCourseById)
app.post('/students_courses', db.createStudentsCourse)
app.put('/students_courses/:student_courses_id', db.updateStudentsCourse)
app.delete('/students_courses/:student_courses_id', db.deleteStudentsCourse)
app.listen(port, () => {
  console.log(`App running on port ${port}.`)
})
app.use('/api-docs', swaggerUi.serve, swaggerUi.setup(swaggerDocument));
