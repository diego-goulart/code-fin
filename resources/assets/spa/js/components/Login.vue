<template xmlns="http://www.w3.org/1999/xhtml">
    <div class="container">
        <div class="row">
            <div class="col s8 offset-s2 z-depth-2">
                <h3 class="center">Code Financeiro</h3>
                <form method="POST" @submit.prevent="login()">
                    <div class="row" v-if="error.status">
                        <div class="col s12">
                            <div class="card-panel red">
                                <span class="white-text">{{error.message}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate" name="email"
                                   v-model="user.email" required autofocus>
                            <label for="email" class="active">E-Mail</label>
                        </div>
                    </div>


                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate"
                                   name="password" v-model="user.password" required>
                            <label for="password" class="active">Senha</label>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col s12">
                            <button type="submit" class="btn">Login</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</template>

<script type="text/javascript">
    import Auth from '../services/auth';
    export default{
        data(){
            return {
                user: {
                    email: '',
                    password: ''
                },
                error: {
                    status: false,
                    message: ''
                }
            }
        },
        methods: {
            login(){
                Auth.login(this.user.email, this.user.password)
                        .then(() => this.$router.go({name: 'dashboard'}))
                        .catch((responseError) => {
                            switch (responseError.status) {
                                case 401:
                                    this.error.message = responseError.data.message;
                                    break;
                                default:
                                    this.error.message = 'Falha no login';
                            }
                            this.error.status = true;
                        });
            }
        }
    }
</script>
