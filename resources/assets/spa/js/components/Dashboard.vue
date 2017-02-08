<template>
    <div class="row">
        <h1>Meu Dashboard</h1>
    </div>
</template>

<script>
    import Auth from '../services/auth';
    import {User} from '../services/resources';
    export default{
        ready() {

            User.get().then((response) => {
                console.log(response.data);
            });
            //console.log(Auth.user());
        }
    }
</script>
