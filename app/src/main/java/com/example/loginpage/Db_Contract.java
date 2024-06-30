package com.example.loginpage;

public class Db_Contract {
    public static String ip = "192.168.5.198";

    public static final String urlRegister = "http://" + ip + "/my_api_android/api-register.php";
    public static final String urlLogin = "http://" + ip + "/my_api_android/api-login.php";
    public static final String urlFetchUsers = "http://" + ip + "/my_api_android/api-fetch-user.php";
    public static final String urlUpdate = "http://" + ip + "/my_api_android/api-update.php";
    public static final String urlDelete = "http://" + ip + "/my_api_android/api-delete.php";
}
