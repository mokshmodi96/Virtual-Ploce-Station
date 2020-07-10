package com.icon.moksh.virtualpolicestation;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.TextView;

import java.util.ArrayList;

public class MyAdapter extends BaseAdapter {
    private Context context;
    private ArrayList<Data>data;
    private TextView emer,emer_num;

    public MyAdapter(Context context, ArrayList<Data> data) {
        this.context = context;
        this.data = data;
    }

    @Override
    public int getCount() {
        return data.size();
    }

    @Override
    public Object getItem(int i) {
        return i;
    }

    @Override
    public long getItemId(int i) {
        return i;
    }

    @Override
    public View getView(int i, View view, ViewGroup viewGroup) {
        view = LayoutInflater.from(context).inflate(R.layout.list,viewGroup,false);
        emer = view.findViewById(R.id.textView2);
        emer_num=view.findViewById(R.id.textView3);
        emer.setText(data.get(i).getName());
        emer_num.setText(data.get(i).getNum());
        return view;
    }
}
