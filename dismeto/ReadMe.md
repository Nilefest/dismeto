DiSMeTO
========= 

Сервис для перевода мед.документов по "клишированным фразам"

# База Данных

## Документы
 - id
 - название документа
 
## Словарь
 - id
 - id документа
 - язык
 - стемма
 - название 


# Code
$doc = new Document($this->db);
$doc = new Document($this->db, 1);

$doc = (new Document($this->db))->create();
$doc = (new Document($this->db, 3))->delete();