const { createApp } = Vue
createApp({
  data() {
    return {
      tasks: null,
      api_url: './app_index.php',
      new_task: ''
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
    update_task() {
      console.log('update task');


    },
    delete_task() {
      console.log('delete task');


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