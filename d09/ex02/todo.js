let cookies = document.cookie.split(';');
let cookie_id = cookies.length + 1;
let parent = document.getElementById('ft_list');
modStyle(parent);

function modStyle(parentNode) {
	parentNode.parentNode.style.backgroundColor = 'grey';
	parentNode.style.backgroundColor = 'red';
}

if (cookies)
{
	cookies.forEach(function(item){
		let div = document.createElement('div');
		let todo = item.split('=');
		if (!todo[1])
			return;
		div.innerHTML = todo[1];
		div.setAttribute('id', todo[0]);
		div.setAttribute('onclick', 'delElem(id)');
		if (todo[0] > cookie_id)
			cookie_id = Number(todo[0]);
		parent.insertBefore(div, parent.firstChild);
	});
}

function newTask()
{
	let task = prompt("Write your new task here:");
	if (task.trim())
	{
		cookie_id++;
		let div = document.createElement('div');
		div.innerHTML = task;
		div.setAttribute('id', cookie_id);
		div.setAttribute('onclick', 'delElem(id)');
		parent.insertBefore(div, parent.firstChild);
		document.cookie = cookie_id + "=" + task;
	}
}

function delElem(id)
{
	if (confirm('Are you sure you want to delete task ' + id))
	{
		let elem = document.getElementById(id);
		elem.parentNode.removeChild(elem);
		document.cookie = id + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
	}
}