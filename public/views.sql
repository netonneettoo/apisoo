-- turmas
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
