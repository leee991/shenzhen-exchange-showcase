# 接口说明 — OneEx / Apexa1

## 1. `xt-guard` 防刷网关

| Method | Path | 说明 | 返回示例 |
|---|---|---|---|
| `GET` | `/__guard/` | 验证引导页 | HTML |
| `GET` | `/__guard/challenge` | 拿一次性 PoW 题目，同时下发 `xt_guard_seed` Cookie | `{"challenge":"...","difficulty":14,"expires_in":120}` |
| `POST` | `/__guard/verify` | 提交 `{challenge, counter}` 校验 | `{"success":true,"expires_in":1800}` |
| `GET` | `/__guard/status` | 查当前是否已放行（只读） | `{"verified":true,"expires_in":1420}` |
| `POST` | `/__guard/refresh` | 活跃页面静默续期（单次会话最多 8 小时） | `{"success":true,"expires_in":1800}` |

## 2. 公共行情接口

| Method | Path | 说明 |
|---|---|---|
| `GET` | `/api/market/tickers` | 45 个主流交易对最新报价和 24h 涨跌幅（走内存秒级缓存） |
| `GET` | `/api/market/kline?symbol=BTCUSDT&period=1min` | K 线数据 |
| `GET` | `/health` | 本机健康检查 |

## 3. PHP 业务模块分组（`application/api/controller`）
- 行情与下单：`Index`、`Market`、`Cycle`（周期/秒合约）、`AiStrategy`（AI 策略）、`Task`
- 账户与资金：`User`、`Wallet`、`My`、`Notify`，以及后台审核 `AppWidthdraw`
- 客服系统（`nthxx-kefu-v2`）：访客独立会话、发图/撤回/已读、坐席 TOTP MFA 和 WebPush
