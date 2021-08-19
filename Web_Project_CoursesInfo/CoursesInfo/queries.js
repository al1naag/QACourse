const Pool = require('pg').Pool
const pool = new Pool({
  user: 'u_19_lag',
  host: '159.69.151.133',
  database: 'db_19_lag',
  password: '123',
  port: 5056,
})
const getStudents = (request, response) => {
  pool.query('SELECT * FROM public.students ORDER BY student_id ASC', (error, results) => {
    if (error) {
      throw error
    }
    response.status(200).json(results.rows)
  })
}
const getStudentById = (request, response) => {
  const student_id = parseInt(request.params.student_id)

  pool.query('SELECT * FROM public.students WHERE student_id = $1', [student_id], (error, results) => {
    if (error) {
      throw error
    }
    response.status(200).json(results.rows)
  })
}
const createStudent = (request, response) => {
  const { name, surname, email, country } = request.body

  pool.query('INSERT INTO public.students ( name, surname, email, country) VALUES ($1, $2, $3, $4)', [name, surname, email, country], (error, results) => {
    if (error) {
      throw error
    }
    response.status(201).send(`Студент добавлен`)
  })
}
const updateStudent = (request, response) => {
  const student_id = parseInt(request.params.student_id)
  const { name, surname, email, country } = request.body

  pool.query(
    'UPDATE public.students SET name = $1, surname = $2, email = $3, country = $4 WHERE student_id = $5',
    [name, surname, email, country, student_id],
    (error, results) => {
      if (error) {
        throw error
      }
      response.status(200).send(`Студент обновлен`)
    }
  )
}
const deleteStudent = (request, response) => {
  const student_id = parseInt(request.params.student_id)

  pool.query('DELETE FROM public.students WHERE student_id = $1', [student_id], (error, results) => {
    if (error) {
      throw error
    }
    response.status(200).send(`Студент удален`)
  })
}


const getCourses = (request, response) => {
  pool.query('SELECT * FROM public.courses', (error, results) => {
    if (error) {
      throw error
    }
    response.status(200).json(results.rows)
  })
}

const getCourseById = (request, response) => {
  const course_id = parseInt(request.params.course_id)
  pool.query('SELECT * FROM public.courses WHERE course_id = $1', [course_id], (error, results) => {
    if (error) {
      throw error
    }
    response.status(200).json(results.rows)
  })
}
const createCourse = (request, response) => {
  const { name_course, price_course } = request.body

  pool.query('INSERT INTO public.courses (name_course, price_course) VALUES ($1, $2)', [name_course, price_course], (error, results) => {
    if (error) {
      throw error
    }
  response.status(201).send(`Курс добавлен`)
  })
}
const updateCourse = (request, response) => {
const course_id = parseInt(request.params.course_id)
  const { name_course, price_course } = request.body

  pool.query(
    'UPDATE public.courses SET name_course = $2, price_course = $3 WHERE course_id = $1',
    [course_id, name_course, price_course],
    (error, results) => {
      if (error) {
        throw error
      }
      response.status(200).send(`Курс обновлен`)
    }
  )
}
const deleteCourse = (request, response) => {
  const course_id = parseInt(request.params.course_id)

  pool.query('DELETE FROM public.courses WHERE course_id = $1', [course_id], (error, results) => {
    if (error) {
      throw error
    }
    response.status(200).send(`Курс удален`)
  })
}

const getPayments = (request, response) => {
  pool.query('SELECT * FROM public.payments ORDER BY payment_id ASC', (error, results) => {
    if (error) {
      throw error
    }
    response.status(200).json(results.rows)
  })
}
const getPaymentById = (request, response) => {
  const payment_id = parseInt(request.params.payment_id)

  pool.query('SELECT * FROM public.payments WHERE payment_id = $1', [payment_id], (error, results) => {
    if (error) {
      throw error
    }
    response.status(200).json(results.rows)
  })
}
const createPayment = (request, response) => {
  const { student_id, name, surname, name_course, payment } = request.body

  pool.query('INSERT INTO public.payments (student_id, name, surname, name_course, payment) VALUES ($1, $2, $3, $4, $5)', [student_id, name, surname, name_course, payment], (error, results) => {
    if (error) {
      throw error
    }
    response.status(201).send(`Добавлена оплата`)
  })
}
const updatePayment = (request, response) => {
  const payment_id = parseInt(request.params.payment_id)
  const { student_id, name, surname, name_course, payment } = request.body

  pool.query(
    'UPDATE public.payments SET student_id = $1, name = $2, surname = $3, name_course = $4, payment = $5 WHERE payment_id = $6',
    [student_id, name, surname, name_course, payment, payment_id],
    (error, results) => {
      if (error) {
        throw error
      }
      response.status(200).send(`Оплата обновлена`)
    }
  )
}
const deletePayment = (request, response) => {
  const payment_id = parseInt(request.params.payment_id)

  pool.query('DELETE FROM public.payments WHERE payment_id = $1', [payment_id], (error, results) => {
    if (error) {
      throw error
    }
    response.status(200).send(`Оплата удалена`)
  })
}

const getStudentsCourses = (request, response) => {
  pool.query('SELECT * FROM public.students_courses ORDER BY student_id ASC', (error, results) => {
    if (error) {
      throw error
    }
    response.status(200).json(results.rows)
  })
}
const getStudentsCourseById = (request, response) => {
  const student_courses_id = parseInt(request.params.student_courses_id)

  pool.query('SELECT * FROM public.students_courses WHERE student_courses_id = $1', [student_courses_id], (error, results) => {
    if (error) {
      throw error
    }
    response.status(200).json(results.rows)
  })
}
const createStudentsCourse = (request, response) => {
  const { student_id, name, surname, name_course } = request.body

  pool.query('INSERT INTO public.students_courses (student_id, name, surname, name_course) VALUES ($1, $2, $3, $4)', [student_id, name, surname, name_course], (error, results) => {
    if (error) {
      throw error
    }
    response.status(201).send(`Студент добавлен на курс`)
  })
}
const updateStudentsCourse = (request, response) => {
  const student_courses_id = parseInt(request.params.student_courses_id)
  const { name, surname, name_course } = request.body

  pool.query(
    'UPDATE public.students_courses SET name = $1, surname = $2, name_course = $3 WHERE student_courses_id = $4',
    [name, surname, name_course, student_courses_id],
    (error, results) => {
      if (error) {
        throw error
      }
      response.status(200).send(`Студент на курсе обновлен`)
    }
  )
}
const deleteStudentsCourse = (request, response) => {
  const student_courses_id = parseInt(request.params.student_courses_id)

  pool.query('DELETE FROM public.students_courses WHERE student_courses_id = $1', [student_courses_id], (error, results) => {
    if (error) {
      throw error
    }
    response.status(200).send(`Студент удален с курса`)
  })
}

module.exports = {
  getStudents,
  getStudentById,
  createStudent,
  updateStudent,
  deleteStudent,
  getCourses,
  getCourseById,
  createCourse,
  updateCourse,
  deleteCourse,
  getPayments,
  getPaymentById,
  createPayment,
  updatePayment,
  deletePayment,
  getStudentsCourses,
  getStudentsCourseById,
  createStudentsCourse,
  updateStudentsCourse,
  deleteStudentsCourse
}
