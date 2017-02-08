import Auth from './auth';
import appConfig from './app.config';

Vue.http.interceptors.push((request, next) => {
    request.headers.set('Authorization', Auth.getAuthorizationHeader());
    next();
});

Vue.http.interceptors.push((request, next) => {
    next((response) => {
        console.log(response.status);
        if(response.status === 401 || response.status === 0){
            return Auth.refreshToken()
                .then(() => {
                    return Vue.http(request);
                })
                .catch(() => {
                    Auth.clearAuth();
                    window.location.href = appConfig.login_url
                });
        }
    });
});