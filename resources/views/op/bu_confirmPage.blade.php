@include('template.app.header')

<body>
    <h4>Pilih Genre Musik Kesukaan Anda : </h4> 
      <div id="centang">
          @foreach ($students as $student)
          <input type="checkbox" name="status[]"> Rock<br> 
          @endforeach
        <hr width="120" align="left"> 
        <input type="checkbox" id="semua">Semua Suka<br>
      </div>
</body>
</html>