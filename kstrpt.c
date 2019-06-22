#include<stdio.h>
void main()
{
	char S[100];
	int K,i;
	scanf("%s",&S);
	scanf("%d",&K);
	for(i=0;i<K;i++)
	{
		printf("%c",S[i]);
	}
}
