<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-todo-list-json</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">

</head>

<body>

    <div id="app" class="container w-50 py-5">
        <h1 class="text-center">Todo List</h1>
        <div class="card my-2 mx-5">

            <ul class="list-group list-group-flush py-1">
                <li v-for="(task, index) in tasks" class="list-group-item d-flex justify-content-between align-items-center" >
                    <span  @click="update_task" :class="{ 'text-decoration-line-through': task.done }" name="created_task" >{{ task.text }}</span>
                    {{index}}
                    <a class="badge text-bg-warning" @click="delete_task" >
                        <i class="fa-solid fa-trash fa-2x"></i>
                    </a>
                </li>
            </ul>

        </div>
        <div class="card my-2 mx-5">
            <div class="input-group">
                <input v-model="new_task" @keyup.enter="add_task" type="text" class="form-control" placeholder="add a task" aria-describedby="button-addon2">
                <button class="btn btn-primary" type="button" id="button-addon2" @click="add_task">add</button>
            </div>
        </div>
    </div>
    <script src='https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js'></script>
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <script src='./app.js'></script>
</body>

</html>