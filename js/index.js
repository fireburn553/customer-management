function popup(id){
    document.getElementById(id).style.display = 'block'
    document.getElementById('forms_container').style.display = 'grid'
}

function closer(id){
    document.getElementById(id).style.display = 'none'
    document.getElementById('forms_container').style.display = 'none'
}


function edit(that, form){
    var td = that.getElementsByTagName('td')

    switch(form){
        case 'customer':
            fillInputFields('form_inputs2',td)
            popup('customer_update_form')
        break
    }
}
function fillInputFields(inputfield, td){
    var inpufields = document.getElementsByClassName(inputfield)
        for(var i = 0; i<td.length; i++){
            if(i == 6 || i == 7)
                inpufields[i].value = parseInt(td[i].innerText)
            
            if(i == 8){
                console.log(td[i].innerText);
                switch(td[i].innerText){
                    case 'bad':
                        document.getElementsByClassName('standing1')[0].checked = true
                    break
                    case 'average':
                        document.getElementsByClassName('standing1')[1].checked = true
                    break
                    case 'good':
                        document.getElementsByClassName('standing1')[2].checked = true
                    break
                    case 'very good':
                        document.getElementsByClassName('standing1')[3].checked = true
                    break
                }
                break
            }
            inpufields[i].value = td[i].innerText
        }
}

function search(){
    var input, filter, table, tr, td, i, txtvalue;
    input = document.getElementById('customer_search')
    filter = input.value.toUpperCase()
    table = document.getElementById('customers_table')
    tr = table.getElementsByTagName('tr')

    for(i = 0; i<tr.length; i++){
        td = tr[i].getElementsByTagName('td')[1]
        if(td){
            txtvalue = td.textContent || td.innerText
            if(txtvalue.toUpperCase().indexOf(filter) > -1)
                tr[i].style.display = ""
            else
                tr[i].style.display = "none"
        }
    }
}

