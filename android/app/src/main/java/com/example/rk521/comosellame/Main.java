package com.example.rk521.comosellame;

import android.os.StrictMode;
import android.support.annotation.IntegerRes;
import android.support.design.widget.CoordinatorLayout;
import android.support.design.widget.Snackbar;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.text.Html;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;
import com.example.rk521.comosellame.Class.Login;

public class Main extends AppCompatActivity {
    private EditText userField;
    private EditText passwordField;
    private TextView recoverPassword;
    private Button loginBtn;
    private CoordinatorLayout coo;
    protected Integer attempts;

    Login l;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        StrictMode.setThreadPolicy(new StrictMode.ThreadPolicy.Builder().permitNetwork().build());

        userField = (EditText) findViewById(R.id.user);
        passwordField = (EditText) findViewById(R.id.password);
        loginBtn = (Button) findViewById(R.id.login_btn);
        coo = (CoordinatorLayout) findViewById(R.id.coordinatorLayout);
        recoverPassword = (TextView) findViewById(R.id.recoverPassword);
        recoverPassword.setText(Html.fromHtml("<a href='recover'>¿Olvidaste tu contraseña?</a>"));
        attempts = 0;
        loginBtn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                login();
            }
        });
    }

    // Cuando se da click en login...
    public void login() {
        attempts++;
        // Solamente 3 intentos por sesion
        if (attempts > 3) {
            Snackbar.make(coo, "Numero de intentos excedido", Snackbar.LENGTH_LONG).show();
        } else {
            String user = userField.getText().toString().trim();
            String pass = passwordField.getText().toString().trim();
            l = new Login(user, pass);
            l.validateLoginWithErrors(coo);
        }
    }
}
