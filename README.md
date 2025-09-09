Dokumentasi API
Dokumentasi ini menyediakan detail tentang endpoint REST API yang tersedia.

Classrooms
Endpoint untuk mengelola data kelas.

1. Get All Classrooms
Method: GET

Endpoint: /api/classrooms

Deskripsi: Mengambil semua data kelas.

Contoh Response Sukses (200 OK):

```json
[
  {
    "id": 1,
    "title": "Kelas 10A",
    "created_at": "2023-10-27T04:12:47.000000Z",
    "updated_at": "2023-10-27T04:12:47.000000Z"
  },
  {
    "id": 2,
    "title": "Kelas 11B",
    "created_at": "2023-10-27T04:13:00.000000Z",
    "updated_at": "2023-10-27T04:13:00.000000Z"
  }
]
```

2. Get Classroom by ID
Method: GET

Endpoint: /api/classrooms/{id}

Deskripsi: Mengambil data kelas berdasarkan ID.

Contoh Response Sukses (200 OK):

```json
{
  "data": {
    "id": 1,
    "title": "Kelas 10A"
  }
}
```

3. Create Classroom
Method: POST

Endpoint: /api/classrooms

Deskripsi: Membuat kelas baru.

Request Body:

```json
{
  "title": "Kelas 12C"
}
```

4. Update Classroom
Method: PUT

Endpoint: /api/classrooms/{id}

Deskripsi: Memperbarui data kelas.

Request Body:

```json
{
  "title": "Kelas 12-C IPA"
}
```

5. Delete Classroom
Method: DELETE

Endpoint: /api/classrooms/{id}

Deskripsi: Menghapus data kelas.

Lessons
Endpoint untuk mengelola data mata pelajaran.

1. Get All Lessons
Method: GET

Endpoint: /api/lessons

Deskripsi: Mengambil semua data mata pelajaran.

2. Get Lesson by ID
Method: GET

Endpoint: /api/lessons/{id}

Deskripsi: Mengambil data mata pelajaran berdasarkan ID.

3. Get Lesson Title by ID
Method: GET

Endpoint: /api/lesson/{lesson_id}

Deskripsi: Mengambil judul mata pelajaran berdasarkan ID.

4. Create Lesson
Method: POST

Endpoint: /api/lessons

Deskripsi: Membuat mata pelajaran baru.

Request Body:

```json
{
  "title": "Biologi"
}
```

5. Update Lesson
Method: PUT

Endpoint: /api/lessons/{id}

Deskripsi: Memperbarui data mata pelajaran.

Request Body:

```json
{
  "title": "Biologi Lanjutan"
}
```

6. Delete Lesson
Method: DELETE

Endpoint: /api/lessons/{id}

Deskripsi: Menghapus data mata pelajaran.

Exams
Endpoint untuk mengelola data ujian.

1. Get Exams by Classroom and Student
Method: GET

Endpoint: /api/exams/{classroom_id}/{student_id}

Deskripsi: Mengambil daftar ujian yang tersedia untuk seorang siswa di kelas tertentu, yang belum dikerjakan dan masih dalam rentang waktu pengerjaan.

Contoh Response Sukses (200 OK):

```json
{
  "exams": [
    {
      "id": 1,
      "title": "Ujian Tengah Semester - Matematika",
      "lesson_id": 1,
      "classroom_id": 1,
      "duration": 60,
      "description": "Ujian mencakup bab 1 sampai 3.",
      "start_time": "2023-11-01 08:00:00",
      "end_time": "2023-11-01 10:00:00"
    }
  ]
}
```

2. Get Exam by ID
Method: GET

Endpoint: /api/exams/{id}

Deskripsi: Mengambil detail data ujian berdasarkan ID.

3. Create Exam
Method: POST

Endpoint: /api/exams

Deskripsi: Membuat ujian baru.

Request Body:

```json
{
  "title": "Ujian Akhir Semester",
  "lesson_id": 1,
  "classroom_id": 1,
  "duration": 120,
  "description": "Ujian mencakup semua materi semester ini.",
  "start_time": "2023-12-10T08:00:00",
  "end_time": "2023-12-10T10:00:00",
  "random_question": true,
  "random_answer": true,
  "show_answer": false
}
```

4. Update Exam
Method: PUT

Endpoint: /api/exams/{id}

Deskripsi: Memperbarui data ujian.

Request Body: (Sama seperti Create Exam)

5. Delete Exam
Method: DELETE

Endpoint: /api/exams/{id}

Deskripsi: Menghapus data ujian.

6. Submit Exam
Method: POST

Endpoint: /api/submit-exam

Deskripsi: Mengirimkan jawaban ujian oleh siswa.

Request Body:

```json
{
  "student_id": 1,
  "exam_id": 1,
  "duration": 55,
  "start_time": "2023-11-01 08:05:10",
  "end_time": "2023-11-01 09:00:10",
  "answers": {
    "1_1": 1,
    "2_1": 3,
    "3_1": 2
  }
}
```

Questions
Endpoint untuk mengelola data pertanyaan.

1. Get Questions by Exam ID
Method: GET

Endpoint: /api/get-questions/{exam_id}

Deskripsi: Mengambil semua pertanyaan untuk ujian tertentu.

Contoh Response Sukses (200 OK):

```json
{
  "questions": [
    {
      "id": 1,
      "exam_id": 1,
      "question": "Siapakah penemu bola lampu?",
      "option_1": "Thomas Edison",
      "option_2": "Albert Einstein",
      "option_3": "Isaac Newton",
      "option_4": "Nikola Tesla",
      "option_5": "Galileo Galilei",
      "answer": 1
    }
  ]
}
```

2. Get Question by ID
Method: GET

Endpoint: /api/questions/{id}

Deskripsi: Mengambil detail pertanyaan berdasarkan ID.

3. Create Question
Method: POST

Endpoint: /api/questions

Deskripsi: Membuat pertanyaan baru untuk sebuah ujian.

Request Body:

```json
{
  "exam_id": 1,
  "question": "2 + 2 = ?",
  "option_1": "1",
  "option_2": "2",
  "option_3": "3",
  "option_4": "4",
  "option_5": "5",
  "answer": 4
}
```

4. Update Question
Method: PUT

Endpoint: /api/questions/{id}

Deskripsi: Memperbarui data pertanyaan.

Request Body: (Sama seperti Create Question)

5. Delete Question
Method: DELETE

Endpoint: /api/questions/{id}

Deskripsi: Menghapus data pertanyaan.

Grades
Endpoint untuk mengelola data nilai.

1. Get All Grades
Method: GET

Endpoint: /api/grades

Deskripsi: Mengambil semua data nilai.

2. Get Grade by ID
Method: GET

Endpoint: /api/grades/{id}

Deskripsi: Mengambil detail nilai berdasarkan ID.

3. Create Grade
Method: POST

Endpoint: /api/grades

Deskripsi: Menyimpan data nilai baru.

Request Body:

```json
{
  "exam_id": 1,
  "student_id": 1,
  "duration": 58,
  "start_time": "2023-11-01T08:00:00",
  "end_time": "2023-11-01T08:58:00",
  "total_correct": 28,
  "grade": 93.33
}
```

4. Update Grade
Method: PUT

Endpoint: /api/grades/{id}

Deskripsi: Memperbarui data nilai.

Request Body: (Sama seperti Create Grade)

5. Delete Grade
Method: DELETE

Endpoint: /api/grades/{id}

Deskripsi: Menghapus data nilai.

6. Get Identity (Classroom & Lesson)
Method: POST

Endpoint: /api/get-identity

Deskripsi: Mendapatkan nama kelas dan mata pelajaran berdasarkan ID.

Request Body:

```json
{
    "classroom_id": 1,
    "lesson_id": 1
}
```

Students
Endpoint untuk mengelola data siswa.

1. Get All Students
Method: GET

Endpoint: /api/students

2. Get Student by ID
Method: GET

Endpoint: /api/students/{id}

3. Create Student
Method: POST

Endpoint: /api/students

Deskripsi: Mendaftarkan siswa baru. Password akan di-hash secara otomatis.

Request Body:

```json
{
    "classroom_id": 1,
    "nisn": "1234567890",
    "name": "Budi Hartono",
    "password": "password123",
    "gender": "Laki-laki"
}
```

4. Update Student
Method: PUT

Endpoint: /api/students/{id}

Deskripsi: Memperbarui data siswa.

Request Body:

```json
{
    "classroom_id": 1,
    "nisn": "1234567890",
    "name": "Budi Hartono Putra",
    "password": "passwordBaru123",
    "gender": "Laki-laki"
}
```

5. Delete Student
Method: DELETE

Endpoint: /api/students/{id}

Answers
Endpoint untuk mengelola jawaban per siswa per soal.

1. Get All Answers
Method: GET

Endpoint: /api/answers

2. Get Answer by ID
Method: GET

Endpoint: /api/answers/{id}

3. Create Answer
Method: POST

Endpoint: /api/answers

Request Body:

```json
{
    "exams_id": 1,
    "exam_sessions_id": 1,
    "questions_id": 1,
    "students_id": 1,
    "question_order": 1,
    "answer_order": 3,
    "answer": 3,
    "is_correct": false
}
```

4. Update Answer
Method: PUT

Endpoint: /api/answers/{id}

5. Delete Answer
Method: DELETE

Endpoint: /api/answers/{id}

Exam Sessions
Endpoint untuk mengelola sesi ujian.

1. Get All Exam Sessions
Method: GET

Endpoint: /api/exam-sessions

2. Get Exam Session by ID
Method: GET

Endpoint: /api/exam-sessions/{id}

3. Create Exam Session
Method: POST

Endpoint: /api/exam-sessions

Request Body:

```json
{
    "title": "Sesi Pagi",
    "exams_id": 1,
    "start_time": "2023-12-10T08:00:00",
    "end_time": "2023-12-10T10:00:00"
}
```

4. Update Exam Session
Method: PUT

Endpoint: /api/exam-sessions/{id}

5. Delete Exam Session
Method: DELETE

Endpoint: /api/exam-sessions/{id}

Exam Groups
Endpoint untuk mengelompokkan siswa ke dalam sesi ujian.

1. Get All Exam Groups
Method: GET

Endpoint: /api/exam-groups

2. Get Exam Group by ID
Method: GET

Endpoint: /api/exam-groups/{id}

3. Create Exam Group
Method: POST

Endpoint: /api/exam-groups

Request Body:

```json
{
    "exams_id": 1,
    "exam_sessions_id": 1,
    "students_id": 123
}
```

4. Update Exam Group
Method: PUT

Endpoint: /api/exam-groups/{id}

5. Delete Exam Group
Method: DELETE

Endpoint: /api/exam-groups/{id}

Authentication
Student Login
Method: POST

Endpoint: /api/login

Deskripsi: Endpoint untuk login siswa menggunakan NISN dan password.

Request Body:

```json
{
    "nisn": "1234567890",
    "password": "password123"
}
```
