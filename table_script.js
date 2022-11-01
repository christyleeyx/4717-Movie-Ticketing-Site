function edit_row(no)
{
    document.getElementById("edit_button"+no).style.display="none";
    document.getElementById("save_button"+no).style.display="block";
	
    var alpha=document.getElementById("alpha_row"+no);
    var num=document.getElementById("num_row"+no);
	
    var alpha_data=alpha.innerHTML;
    var num_data=num.innerHTML;
	
    alpha.innerHTML="<input type='text' id='alpha_text"+no+"' value='"+alpha_data+"'>";
    num.innerHTML="<input type='text' id='num_text"+no+"' value='"+num_data+"'>";
}

function save_row(no)
{
    var alpha_val=document.getElementById("alpha_text"+no).value;
    var num_val=document.getElementById("num_text"+no).value;


    document.getElementById("alpha_row"+no).innerHTML=alpha_val;
    document.getElementById("num_row"+no).innerHTML=num_val;


    document.getElementById("edit_button"+no).style.display="block";
    document.getElementById("save_button"+no).style.display="none";
}

function delete_row(no)
{
 document.getElementById("row"+no+"").outerHTML="";
}

function add_row()
{
    var new_alpha=document.getElementById("new_alpha").value;
    var new_num=document.getElementById("new_num").value;

	
    var table=document.getElementById("data_table");
    var table_len=(table.rows.length)-1;
    var row = table.insertRow(table_len).outerHTML="<tr id='row"+table_len+"'><td id='alpha_row"+table_len+"'>"+new_alpha+"</td><td id='num_row"+table_len+"'>"+new_num+"</td><td><input type='button' id='edit_button"+table_len+"' value='Edit' class='edit' onclick='edit_row("+table_len+")'> <input type='button' id='save_button"+table_len+"' value='Save' class='save' onclick='save_row("+table_len+")'> <input type='button' value='Delete' class='delete' onclick='delete_row("+table_len+")'></td></tr>";

    document.getElementById("new_alpha").value="";
    document.getElementById("new_num").value="";
}