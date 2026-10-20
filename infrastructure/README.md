# infrastructure

## Getting Started

Populate `.env`:

- `ARM_SUBSCRIPTION_ID` subscription of tfstate
- `ARM_ACCESS_KEY` storage of tfstate
- `GITHUB_TOKEN` github PAT
- `NAMECHEAP_USER_NAME`
- `NAMECHEAP_API_USER`
- `NAMECHEAP_API_KEY` your ip must be allowlisted

```bash
set -a && source .env && set +a
```

`cd environments/{chosen env}`

`tofu init`
