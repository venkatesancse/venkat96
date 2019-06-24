#include<stdio.h>
int main()
{
	int N,L,R;
	scanf("%d \n %d %d",&N,&L,&R);
	N>L&&N<R? printf("yes"):printf("no");
	return 0;
}
