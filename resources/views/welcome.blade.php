<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
    <div id="app">
        <ul>
            <li v-for="skill in skills" v-text="skill"></li>
        </ul>
    </div>
  {{--   <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    
     
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
    
</body>
</html>
