package com.example.rk521.comosellame;

import org.junit.Test;

import static org.junit.Assert.*;
import com.example.rk521.comosellame.validations.Password;

/**
 * Created by rk521 on 18/08/16.
 */
public class PasswordTest {
    @Test
    public void regex_password_isCorrect() throws Exception {
        Password p1 = new Password("root");
        assertEquals(true, p1.checkOnlyNumbersAndLetters());

        Password p2 = new Password("p4ssw0rd");
        assertEquals(true, p2.checkOnlyNumbersAndLetters());

        Password p3 = new Password("Contraseña");
        assertEquals(true, p3.checkOnlyNumbersAndLetters());

        Password p4 = new Password("root/");
        assertEquals(false, p4.checkOnlyNumbersAndLetters());
    }
}
