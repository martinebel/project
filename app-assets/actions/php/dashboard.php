<?php
require '../../../db.php';
$array=array();

switch ($_REQUEST["action"]) {
  case 'getStats':
  $totalProyectos=0;
  $totalTareas=0;
  $totalTickets=0;

  $stmt = $dbh->prepare("select count(*) as numero from project_user inner join projects on projects.project_id=project_user.project_id where status='OPEN' and user_id=".$_SESSION["idusuario"]);
  $stmt->execute();
  $result = $stmt->fetchAll();
  foreach($result as $row){
    $totalProyectos=$row["numero"];
  }

  $stmt = $dbh->prepare("select count(*) as numero from task_user inner join tasks on tasks.task_id=task_user.task_id where status='OPEN' and user_id=".$_SESSION["idusuario"]);
  $stmt->execute();
  $result = $stmt->fetchAll();
  foreach($result as $row){
    $totalTareas=$row["numero"];
  }

  $stmt = $dbh->prepare("select count(*) as numero from tickets where status='OPEN' and assigned_to=".$_SESSION["idusuario"]);
  $stmt->execute();
  $result = $stmt->fetchAll();
  foreach($result as $row){
    $totalTickets=$row["numero"];
  }

  $listaTareas=array();
  $listaTickets=array();

  $stmt = $dbh->prepare("select tickets.*,projects.name from tickets inner join projects on projects.project_id=tickets.project_id where tickets.status<>'CLOSED' and assigned_to=".$_SESSION["idusuario"]);
  $stmt->execute();
  $result = $stmt->fetchAll();
  foreach($result as $row){
    array_push($listaTickets,array(
      "ticket_id"=>$row["ticket_id"],
      "project"=>$row["name"],
      "status"=>$row["status"],
      "subject"=>$row["subject"],
      "date"=>$row["date_creation"],
      "project_id"=>$row["project_id"]
    ));
  }

  $stmt = $dbh->prepare("select tasks.*,projects.name as projectName,users.name from task_user inner join tasks on tasks.task_id=task_user.task_id inner join projects on projects.project_id=tasks.project_id inner join users on users.user_id=tasks.author_id where tasks.status<>'CLOSED' and task_user.user_id=".$_SESSION["idusuario"]);
  $stmt->execute();
  $result = $stmt->fetchAll();
  foreach($result as $row){
    array_push($listaTareas,array(
      "task_id"=>$row["task_id"],
      "project"=>$row["projectName"],
      "status"=>$row["status"],
      "user"=>$row["name"],
      "title"=>$row["title"],
      "project_id"=>$row["project_id"]
    ));
  }

  array_push($array,array(
    "projectCount"=>$totalProyectos,
    "taskCount"=>$totalTareas,
    "ticketCount"=>$totalTickets,
    "ticketList"=>$listaTickets,
    "taskList"=>$listaTareas
  ));
  echo json_encode($array);
  break;
}
 ?>
