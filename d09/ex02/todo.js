//let cookies = document.cookie.split(';');
//let cookie_id = cookies.length;
cookie_id = 0;
document.cookie = "kalle=kalle";
console.dir(document.cookie);
function newTask()
{
	let task = prompt("Write your new task here:");
	if (task.trim())
	{
		cookie_id++;
		let parent = document.getElementById('ft_list');
		let div = document.createElement('div');
		div.innerHTML = task;
		div.setAttribute('id', cookie_id);
		div.setAttribute('onclick', 'delElem(cookie_id)');
		setCookie = cookie_id + "=" + div.innerHTML;
		document.cookie = setCookie;
		document.cookie = "kalle=kalle";
		console.log(document.cookie);
		console.log(typeof(setCookie));
		console.log(setCookie);
	}
}
function delElem(elem)
{
	console.dir(document);
}


