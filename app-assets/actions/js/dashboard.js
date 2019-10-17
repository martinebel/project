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
    }

  }
});
