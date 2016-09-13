package com.example.rk521.comosellame.Class;

import android.os.StrictMode;
import android.support.design.widget.CoordinatorLayout;
import android.support.design.widget.Snackbar;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.URL;
import static com.example.rk521.comosellame.Constants.IP_SERVER;

/**
 * Created by rk521 on 18/08/16.
 */
public class Login {
    protected String user;
    protected String password;

    // Constructor, recibe user y password
    public Login(String user, String password) {
        this.user = user;
        this.password = password;
    }

    // valida el inicio de sesion. muestra los errores
    public void validateLoginWithErrors(CoordinatorLayout coo) {
        String status = null;

        if (this.user.equals("root") && this.password.equals("toor")) {
            status = "Inicio de sesion correcto!";
        } else {
            if (this.user.equals("root") && !this.password.equals("toor")) {
                status = "Usuario correcto, contraseña incorrecta";
            } if (!this.user.equals("root") && this.password.equals("toor")) {
                status = "Usuario incorrecto, contraseña correcta";
            } else {
                status = "Exception";
            }
        }

        this.notificationError(coo, status);
    }

    // Si el login es incorrecto, se muestran los errores
    void notificationError(CoordinatorLayout coo, String msg) {
        Snackbar.make(coo, msg, Snackbar.LENGTH_SHORT).show();
    }

    // hace la conexion a la base de datos, pendiente
    public String getApiLogin() throws JSONException {
        String response = "";
        JSONArray res = null;

        StrictMode.setThreadPolicy(new StrictMode.ThreadPolicy.Builder().permitNetwork().build());

        try {
            URL url = new URL(IP_SERVER + "login/user="+ this.user +"&password=" + this.password);
            HttpURLConnection connection = (HttpURLConnection) url.openConnection();
            BufferedReader buffer = new BufferedReader(new InputStreamReader(connection.getInputStream()));

            String line = "";
            while ((line = buffer.readLine()) != null) {
                response += line;
            }

            buffer.close();

        } catch (MalformedURLException e) {
            e.printStackTrace();
        } catch (IOException e) {
            e.printStackTrace();
        }

        res = new JSONArray(response);
        JSONObject obj = res.getJSONObject(1);
        String status = obj.getString("statujs");

        System.out.println(status);

        return status;
    }
}
