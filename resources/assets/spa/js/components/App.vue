<template>
    <div id="app">
        <header></header>

        <main>
            <router-view></router-view>
        </main>

        <footer class="page-footer">
            <div class="footer-copyright">
                <div class="container">
                    &copy; {{ year }} <a class="grey-text text-lighten-4" href="#">Triup - Excelência em Web</a>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
    export default{
        data() {
            return {
                year: new Date().getFullYear()
            }
        }
    }
</script>

<style type="text/css">

    #app{
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto
    }
</style>
