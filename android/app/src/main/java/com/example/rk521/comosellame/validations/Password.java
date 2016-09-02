package com.example.rk521.comosellame.validations;

import android.support.design.widget.CoordinatorLayout;
import android.support.design.widget.Snackbar;

import java.util.regex.Pattern;

/**
 * Created by rk521 on 18/08/16.
 */
public class Password {
    protected String password;

    // Constructor
    public Password(String password) {
        this.password = password;
    }

    // Realiza todas las validaciones devuelve true o false
    boolean fullCheck() {
        boolean status = false;
        if (this.checkLenght()) {
            if (this.checkNumbers()) {
                if (this.checkOnlyNumbersAndLetters()) {
                    status = true;
                }
            } else {
                status = false;
            }
        } else {
            status = false;
        }

        return status;
    }

    // Realiza todas las validaciones y muestra los errores
    void fullCheckShowErrors(CoordinatorLayout coo) {
        if (this.checkLenght()) {
            if (this.checkNumbers()) {
                if (this.checkOnlyNumbersAndLetters()) {
                    this.notificationError(coo, "La contraseña NO puede contener caracteres especiales");
                }
            } else {
                this.notificationError(coo, "La contraseña debe contener al menos un numero");
            }
        } else {
            this.notificationError(coo, "La contraseña debe ser mayor a 6 caracteres");
        }
    }

    // muestra los errores con Snackbar
    void notificationError(CoordinatorLayout coo, String msg) {
        Snackbar.make(coo, msg, Snackbar.LENGTH_SHORT).show();
    }

    // La logitud debe ser mayor o igual a 6
    boolean checkLenght() {
        if (this.password.length() >= 6) {
            return true;
        } else {
            return false;
        }
    }

    // Debe contener al menos un numero
    boolean checkNumbers() {
        int contadorNumeros = 0;
        for (int i = 0; i < this.password.length(); i++) {
            int[] numeros = {0, 1, 2, 3, 4, 5, 6, 7, 8, 9};
            for (int n : numeros ) {
                if (this.password.charAt(i) == n) {
                    contadorNumeros++;
                }
            }
        }

        if (contadorNumeros > 0) {
            return true;
        } else {
            return false;
        }
    }

    /*
        Solo puede contener letras A-Z mayusculas o minusculas
        numeros y puede incluir la letra "ñ"
     */
    public boolean checkOnlyNumbersAndLetters() {
        Pattern regex = Pattern.compile("^[ña-zÑA-Z0-9]*$");
        if (regex.matcher(password).matches()) {
            return true;
        } else {
            return false;
        }
    }
}
