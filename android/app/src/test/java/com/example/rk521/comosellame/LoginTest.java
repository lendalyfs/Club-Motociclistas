package com.example.rk521.comosellame;

import com.example.rk521.comosellame.Class.Login;

import org.junit.Test;

import static org.junit.Assert.*;

/**
 * Created by rk521 on 22/08/16.
 */
public class LoginTest {
    @Test
    public void login_isCorrect() throws Exception {
        Login l1 = new Login("root", "toor");
        assertEquals("1", l1.getApiLogin());

        Login l2 = new Login("rot", "toor");
        assertEquals("0", l2.getApiLogin());
    }
}
