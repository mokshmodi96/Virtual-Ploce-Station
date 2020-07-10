package com.icon.moksh.virtualpolicestation;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.TextView;

import java.util.ArrayList;

public class CallActivity extends AppCompatActivity {
    ArrayList<Data> data = new ArrayList<Data>();
    MyAdapter myAdapter;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_call);
        ListView listView = findViewById(R.id.listview);
        data.add(new Data("Police","100"));
        data.add(new Data("Fire Station","101"));
        data.add(new Data("Ambulance","102"));
        data.add(new Data("Women Harassment","1098"));
        data.add(new Data("Child Abuse","1014"));

        myAdapter = new MyAdapter(this,data);
        listView.setAdapter(myAdapter);

        listView.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> adapterView, View view, int i, long l) {
               Data value =data.get(i);
                Intent intent = new Intent(Intent.ACTION_CALL, Uri.parse("tel:" + value.getNum()));
                startActivity(intent);
            }
        });

    }
}