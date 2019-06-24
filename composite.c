#include<stdio.h>
#include<math.h>
int main()
{
	int N,itr,sqr;
	scanf("%d",&N);
	sqr=sqrt(N);
	for(itr=2;itr<=sqr;itr++)
	{
		if(N%itr==0)
		{
			printf("yes");
			break;
		}
	}
	if(itr==sqr+1)
	printf("no");
	return 0;
}
