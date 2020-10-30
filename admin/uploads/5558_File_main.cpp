#include <iostream>
using namespace std;
int top=-1;
int stacksize=3;
int array[3];
void push(int item)
{
	if (top==stacksize-1)
	{
		cout<<"stack overflow";
	}
	else
	{
		array[++top]=item;
	}
	
}
void pop()
{
	if(top==-1)
	{
		cout<<"stack uderflow";
	}
	else
	{
		top--;
	}
}
void display()
{
	
	for(int i=0;i<=2;i++)
	{
		cout<<"["<<i<<"]="<<array[i];
	}
	cout<<endl;
}
int main() 
{int g;
	for(int g=0;g<=2;g++)
	{
		cout<<"enter any number"<<endl;
		cin>>array[g];
	}
	 push(g);
	 display();
	pop();
	display();
}

/* run this program using the console pauser or add your own getch, system("pause") or input loop */


