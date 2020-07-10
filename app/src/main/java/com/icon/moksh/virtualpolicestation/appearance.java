package com.icon.moksh.virtualpolicestation;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.widget.RadioButton;
import android.widget.RadioGroup;
import android.widget.Toast;

public class appearance extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_appearance);
        SharedPreferences sharedPreferences = getSharedPreferences("MyPreference",MODE_PRIVATE);
        final SharedPreferences.Editor editor = sharedPreferences.edit();
        RadioGroup radioGroup = findViewById(R.id.radiogroup);
        radioGroup.setOnCheckedChangeListener(new RadioGroup.OnCheckedChangeListener() {
            @Override
            public void onCheckedChanged(RadioGroup radioGroup,int i) {
                String theme;
                int selectedId = radioGroup.getCheckedRadioButtonId();
                RadioButton radioButton = findViewById(selectedId);
                switch (selectedId){
                    case R.id.radioButton:
                        theme="mapbox://styles/mapbox/light-v10";
                        break;
                    case R.id.radioButton2:
                        theme="mapbox://styles/mapbox/dark-v10";
                        break;
                    case R.id.radioButton3:
                        theme="mapbox://styles/mapbox/traffic-night-v2";
                        break;
                    case R.id.radioButton4:
                        theme="mapbox://styles/mapbox/traffic-day-v2";
                        break;
                    case R.id.radioButton5:
                        theme="mapbox://styles/mapbox/satellite-v9";
                        break;
                    default:
                        theme="mapbox://styles/mapbox/satellite-v9";
                }
                editor.putString("Theme",theme);
                editor.apply();
                Toast.makeText(getApplicationContext(),"Theme Selected",Toast.LENGTH_LONG).show();
                Intent intent = new Intent(appearance.this, MainActivity.class);
                startActivity(intent);
                finish();
            }
        });
    }

    @Override
    public void onBackPressed() {
        Intent intent = new Intent(appearance.this,MainActivity.class);
        startActivity(intent);
    }
}