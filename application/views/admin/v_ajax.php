<!DOCTYPE html>
<html>
<head>
  <title>Tutorial Codeigniter</title>
</head>
<body>
  <h1>Live Data Search</h1>
  Pencarian
  <input type="text" name="search_text" id="search_text" autofocus="" placeholder="Nama Siswa/ NIS">
  <br><br>
  <div id="result"></div>
 
  <script type="text/javascript" src="<?= base_url('asset/js/jquery.min.js'); ?>"></script>
  <script>
    load_data();
 
    function load_data(query)
    {
      $.ajax({
        url     :"<?php echo base_url('livesearch/fetch'); ?>",
        method  :"POST",
        data    :{query:query},
        success :function(data)
        {
          $('#result').html(data);
        }
      })   
    }
     
    $('#search_text').keyup(function(){
      let search        = $(this).val();
      let len_text  = search.length;
      if (len_text > 0)
      {
        load_data(search);
      }else{
        $("#result").html("");
      }
    });
  </script>
</body>
</html>