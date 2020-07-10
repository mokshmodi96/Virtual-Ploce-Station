package com.icon.moksh.virtualpolicestation;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.webkit.WebView;
import android.webkit.WebViewClient;

public class FirRegister extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_fir_register);
        WebView webView = findViewById(R.id.webview);
        webView.loadUrl("http://192.168.1.9:8080/VPSAdminPanel/registerfir.php");
        webView.setWebViewClient(new MyBrowser());
    }

    private static class MyBrowser extends WebViewClient {
        @Override
        public boolean shouldOverrideUrlLoading(WebView view, String url) {
            view.loadUrl(url);
            return true;
        }
    }
}