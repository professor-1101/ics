import type { Metadata } from "next";
import { Inter, Zen_Dots } from "next/font/google";
import "./globals.css";
import ClientBody from "./ClientBody";

const inter = Inter({
  subsets: ["latin"],
  variable: "--font-inter",
});

const zenDots = Zen_Dots({
  weight: "400",
  subsets: ["latin"],
  variable: "--font-zen-dots",
});

export const metadata: Metadata = {
  title: "ICS Group - OT/ICS Cybersecurity Solutions",
  description: "Protecting critical infrastructure through advanced OT/ICS cybersecurity solutions",
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="en">
      <ClientBody className={`${inter.variable} ${zenDots.variable} font-sans`}>
        {children}
      </ClientBody>
    </html>
  );
}
