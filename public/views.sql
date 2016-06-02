-- discipline_classes (turmas)
select
  dc.id,
  d.description as discipline,
  u.name as teacher,
  dc.year,
  dc.day_of_week
from discipline_classes dc
inner join disciplines d on dc.discipline_id = d.id
inner join teachers t on dc.teacher_id = t.id
inner join users u on t.user_id = u.id

-- course_disciplines
select
  cd.id,
  c.id as course_id,
  c.description as course_description,
  d.id as discipline_id,
  d.description as discipline_description
from course_disciplines cd
inner join courses c on cd.course_id = c.id
inner join disciplines d on cd.discipline_id = d.id
