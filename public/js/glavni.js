
    select = document.getElementById('sel');
var array = ["Asia","North America","Europe"];

select.innerHTML = "Select an office";
for (var i = 0; i < array.length; i++) {
    var option = document.createElement("option");
    option.value = array[i];
    option.innerHTML = array[i];
    select.appendChild(option);
}