declare global {
  interface Window {
    MauticSDK?: {
      onLoad: () => void;
    };
  }
}

declare global {
  interface Window {
    MauticDomain?: string;
    MauticLang?: { submittingMessage: string };
  }
}

