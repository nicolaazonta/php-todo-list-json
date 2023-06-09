const { createApp } = Vue
createApp({
  data() {
    return {
      tasks: null,
      api_url: './app_index.php',
      new_task: '',
      index: ''
    }
  },
  methods: {

    add_task() {
      console.log('add task');

      const data = {
        new_task: this.new_task
      }

      this.new_task = '';

      axios.post(
        './storeTasks.php',
        data,
        {
          headers: { 'Content-Type': 'multipart/form-data' }
        }).then(response => {
          console.log(response);
          this.tasks = response.data
        })
        .catch(error => {
          console.error(error.message);
        })

    },
    update_task(index) {
      console.log('update task');
      const data = {
        index: index
      }

      axios.post(
        './updateTask.php',
        data,
        {
          headers: { 'Content-Type': 'multipart/form-data' }
        }).then(response => {
          //console.log(response);
          this.tasks = response.data
        })
        .catch(error => {
          console.error(error.message);
        })
    },

    delete_task(index) {
      console.log('delete task');
      const data = {
        index: index
      }

      axios.post(
        './deleteTask.php',
        data,
        {
          headers: { 'Content-Type': 'multipart/form-data' }
        }).then(response => {
          //console.log(response);
          this.tasks = response.data
        })
        .catch(error => {
          console.error(error.message);
        })
    },
  },
  mounted() {

    axios
      .get(this.api_url)
      .then(response => {
        console.log(response);
        this.tasks = response.data;
      })
      .catch(error => {
        console.error(error.message);
      })


  }
}).mount('#app')