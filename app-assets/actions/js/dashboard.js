$.ajax({
  url: 'app-assets/actions/php/dashboard.php?action=getStats',
  async: true,
  contentType: "application/json",
  success: function(data) {
    var obj=JSON.parse(data);
    for(var i=0;i<obj.length;i++)
    {
      $("#totalProyectos").html(obj[i].projectCount);
      $("#totalTareas").html(obj[i].taskCount);
      $("#totalTickets").html(obj[i].ticketCount);

      for(var k=0;k<obj[i].taskList.length;k++)
      {
        var priority;
        switch(obj[i].taskList[k].status)
        {
          case 'OPEN': priority='<span class="badge badge-success">Abierto</span>'; break;
          case 'CLOSED': priority='<span class="badge badge-warning">Cerrado</span>'; break;
          case 'HOLD': priority='<span class="badge badge-danger">En Espera</span>'; break;
          case 'PROGRESS': priority='<span class="badge badge-secondary">En Progreso</span>'; break;
        }
        $("#recent-buyers").append('<a href="viewProject.php?id='+obj[i].taskList[k].project_id+'" class="media border-0"><div class="media-body w-100"><h6 class="list-group-item-heading">'+obj[i].taskList[k].title+'</h6><p class="list-group-item-text mb-0">'+priority+' <span class="badge badge-secondary">'+obj[i].taskList[k].project+'</span> </p></div></a>');
      }


      for(var k=0;k<obj[i].ticketList.length;k++)
      {
        var priority;
        switch(obj[i].ticketList[k].status)
        {
          case 'OPEN': priority='<span class="badge badge-success">Abierto</span>'; break;
          case 'CLOSED': priority='<span class="badge badge-warning">Cerrado</span>'; break;
          case 'HOLD': priority='<span class="badge badge-danger">En Espera</span>'; break;
          case 'PROGRESS': priority='<span class="badge badge-secondary">En Progreso</span>'; break;
        }
        $("#ticketTable").append('<tr><td class="text-truncate">'+obj[i].ticketList[k].ticket_id+'</td><td class="text-truncate"><a href="viewTicket.php?id='+obj[i].ticketList[k].project_id+'">'+obj[i].ticketList[k].project+'</a></td><td class="text-truncate">'+obj[i].ticketList[k].subject+'</td><td class="text-truncate">'+priority+'</td></tr>');
      }
    }

  }
});
