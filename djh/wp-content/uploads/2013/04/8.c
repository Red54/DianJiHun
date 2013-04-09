#include <stdio.h>
int main()
{
	int i,j,k=0;
	char l[1000];
	for(i=0;i<1000;i++)
	{
		scanf("%c",&l[i]);
		if(l[i]==10)
			scanf("%c",&l[i]);
	}
	for(i=0;i<995;i++)
	{
		j=(l[i]-48)*(l[i+1]-48)*(l[i+2]-48)*(l[i+3]-48)*(l[i+4]-48);
		if(j>k)k=j;
	}
	printf("%d\n",k);
	return 0;
}
