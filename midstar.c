#include<stdio.h>
int main()
{
	char str[1000];
	int i;
	scanf("%s",str);
	for(i=0;str[i];i++);
	if(i%2)
	{
		str[i/2]='*';
	}
	else
	{
		str[i/2]=str[(i/2)-1]='*';
	}
	printf("%s",str);
	return 0;
}
